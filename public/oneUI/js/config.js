//funtions

//Select Umum

function select2Initial(selector, placeholder) {
    $(selector).select2({
        witdh: '100%',
        theme: 'bootstrap4',
        placeholder: `Cari ${placeholder}`,
        closeOnSelect: true,
    })
}


//Select by POST

function select2AjaxPost(selector, url, placeholder) {
    $(selector).select2({
        witdh: '100%',
        theme: 'bootstrap4',
        placeholder: `Cari ${placeholder}`,
        closeOnSelect: true,
        ajax: {
            url: url,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: function(params) {
                return {
                    search: params.term,
                    page: params.page || 1
                }
            },
            processResults: function(response) {
                return {
                    pagination: {
                        more: response.next_page_url != null
                    },
                    results: response.results[0]
                };
            },

            delay: 500
        },
    });
}


//Post Data

function postData(url, formData) {
    return new Promise((resolve, rejected) => {
        fetch(url, {
                method: "POST",
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: formData
            })
            .then(res => res.json())
            .then(rs => {
                if (rs.status == 201) {
                    resolve(rs)
                } else {
                    throw rs.message
                }
            })
            .catch(err => {
                rejected(err)
            })
    })
}



//get data
async function getData(url) {
    return new Promise(async(resolve, rejected) => {
        let response = await fetch(url)
        let data = await response.json();
        if (data.status == 200) {
            resolve(data)
        } else {
            rejected(data)
        }

        // fetch(url)
        //     .then(res => res.json())
        //     .then(rs =>{
        //         if(rs.status == 200){
        //             resolve(rs)
        //          }else{
        //              throw rs.message
        //          }
        //     })
        //     .catch(err =>{
        //         rejected(err)
        //     })
    })
}

//API BPJS

//get
function getDataByBPJS(url) {
    return new Promise((resolve, rejected) => {
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if (result.metadata.code == 200) {
                    resolve(result)
                } else {
                    rejected(result)
                }
            })
    })
}
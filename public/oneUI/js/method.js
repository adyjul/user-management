//general
function getData(url){
    return new Promise((resolve,reject) => {
        loader.show()
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if(result.code == 200){
                    resolve(result)
                }else{
                    throw result.metadata.message
                }
            })
            .catch((err) => {
                reject(err)
            })
            .finally(() => loader.hide())
    })
}

function deleteData(url){
    return new Promise((resolve,reject) => {
        loader.show()
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if(result.code == 200){
                    resolve(result)
                }else{
                    throw result.metadata.message
                }
            })
            .catch((err) => {
                reject(err)
            })
            .finally(() => loader.hide())
    })
}


function restoreData(url){
    return new Promise((resolve,reject) => {
        loader.show()
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if(result.code == 201){
                    resolve(result)
                }else{
                    throw result.status
                }
            })
            .catch((err) => {
                reject(err)
            })
            .finally(() => loader.hide())
    })
}

function deleteDataItem(url){
    return new Promise((resolve,reject) => {
        loader.show()
        fetch({url,method : DELETE})
            .then(res => res.json())
            .then(result => {
                if(result.code == 200){
                    resolve(result)
                }else{
                    throw result.metadata.message
                }
            })
            .catch((err) => {
                reject(err)
            })
            .finally(() => loader.hide())
    })
}

function postData(url,formData){
    return new Promise((resolve,reject) => {
        loader.show();
        fetch(url,{
            method: "POST",
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

            },
            body:formData
        })
        .then(res => res.json())
        .then(rs => {
            if(rs.code == 201){
                resolve(rs.data);
            }else{
                throw rs.metadata.message
            }
        })
        .catch(err => {
            reject(err)
        })
        .finally(() => {
            loader.hide()
        })
    })
}



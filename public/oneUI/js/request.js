//post data
function postDataWithPromise(url,formData)
{
    return new Promise((resolve,rejected) =>{
        fetch(url,{
            method: "POST",
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        })
        .then(res => res.json())
        .then(rs => {
            if(rs.code == 201 || rs.code == 200 ){
                resolve(rs)
            }
            //jika error respon custom dari controller
            else if(rs.code == 500){
                throw(rs.message);
            }
            //jika error response dari laravel
            else{
                let err = {
                    'code' : 500,
                    'message' : Object.values(rs.errors)[0][0]
                }
                throw err
            }
        })
        .catch(err => {
            rejected(err)
        })
    } )
}


function deleteData(url){
    return new Promise((resolve,reject) => {
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if(result.code == 200){
                    resolve(result)
                }else if(rs.code == 500){
                    throw(rs);
                }
                //jika error response dari laravel
                else{
                    let err = {
                        'code' : 500,
                        'message' : Object.values(rs.errors)[0][0]
                    }
                    throw err
                }
            })
            .catch((err) => {
                reject(err)
            })

    })
}


function getDataWithPromise(url){
    return new Promise((resolve,reject) => {
        fetch(url)
            .then(res => res.json())
            .then(result => {
                if(result.code == 200){
                    resolve(result)
                }else if(result.code == 500){

                    throw(result.message);
                }
                //jika error response dari laravel
                else{
                    let err = {
                        'code' : 500,
                        'message' : Object.values(rs.errors)[0][0]
                    }
                    throw err
                }
            })
            .catch((err) => {
                reject(err)
            })

    })
}



//post data with JSON stringify
function postDataWithJsonStringify(url,...data)
{
    return new Promise((resolve,rejected) =>{
        fetch(url,{
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify(data[0])
        })
        .then(res => res.json())
        .then(rs => {

            if(rs.code == 201 || rs.code == 200 ){
                resolve(rs)
            }
            //jika error respon custom dari controller
            else if(rs.code == 500){

                throw(rs.message);
            }
            //jika error response dari laravel
            else{
                let err = {
                    'code' : 500,
                    'message' : Object.values(rs.errors)[0][0]
                }
                throw err
            }
        })
        .catch(err => {
            rejected(err)
        })
    } )
}

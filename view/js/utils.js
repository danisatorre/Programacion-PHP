function ajaxPromise(sUrl, sType, sTData, sData = undefined) {
    console.log("hola ajaxPromise");
    // console.log("sUrl -> " + sUrl + " sType -> " + sType + " sTData -> " + sTData + " sData -> " + sData);
    // return false;
    return new Promise((resolve, reject) => {
        $.ajax({ // dirige al servidor
            url: sUrl, // url del servidor
            type: sType,
            dataType: sTData,
            data: sData
        }).done((data) => {
            // console.log(data);
            // return false;
            resolve(data);
        }).fail((jqXHR, textStatus, errorThrow) => {
            reject(errorThrow);
        }); 
    });
}
class MyAjax {
    constructor(token) {
        this.token = token;
    }

    /*GET - ADATOK LEKÉRÉSE*/
    getAjax(apiEndPoint, array, myCallback) {
        array.splice(0, array.length); 
        $.ajax({
            url: apiEndPoint,
            type: "GET", 
            success: function (result) {
                result.forEach((element) => {
                    array.push(element); 
                });                     
                myCallback(array); 
            },
        });
        console.log("GET OK");
    }


 /*************POST > UJ ADAT FELVITELE*********
 postAjax(apiEndPoint, newData) {
    newData._token = this.token;
    $.ajax({
        headers: { "X-CSRF-TOKEN": this.token },
        url: apiEndPoint,
        type: "POST",
        data: newData,
        success: function (result) {
            console.log("POST success");
        },            
    });
}


/*************DELETE > ADAT TORLESE************
deleteAjax(apiEndPoint, id) {
    $.ajax({
        headers: { "X-CSRF-TOKEN": this.token },
        url: apiEndPoint + "/" + id,
        type: "DELETE",
        success: function (result) {
            console.log("DEL success");
        },            
    });
}

/***********PUT > ADAT MODOSITAS***************
putAjax(apiEndPoint, newData, id) {
    newData._token = this.token;
    $.ajax({
        headers: { "X-CSRF-TOKEN": this.token },
        url: apiEndPoint + "/" + id,
        type: "PUT",
        data: newData,
        success: function (result) {
            console.log("PUT success");               
        }
    });
    }  
    
    */
}

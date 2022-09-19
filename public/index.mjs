import {exportImages} from 'pdf-export-images';

exportImages("./pdfs/test.pdf","./imgExtPdf")
    .then(
    function (data) {
        // return data;
        console.log("images", data);
    }).catch(function (error) {
        console.log(error)
    })

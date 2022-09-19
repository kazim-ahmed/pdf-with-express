import {exportImages} from 'pdf-export-images';
exportImages("./public/pdfs/test.pdf","./public/imgExtPdf")
.then(
function (data) {
    // return data;
    console.log("images", data);
}).catch(function (error) {
    console.log(error)
})
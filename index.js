import {exportImages} from 'pdf-export-images';
import { createRequire } from 'module';
const require = createRequire(import.meta.url);
const express = require("express");
const fileUpload = require("express-fileupload");
const pdfParse = require("pdf-parse");
const app = express();
// export const foo = () => true
// import('./index.mjs').then(x => console.log(x.foo()))
// // index.js:
// var pdfExportImages = require("pdf-export-images")
// import {exportImages} from 'pdf-export-images';
// const exportImages = require('pdf-export-images');
// import express from "express";
// import fileUpload from "express-fileupload";
// import pdfParse from "pdf-parse";
// var path = require('path');
// const e = require("express");

// exportImages("./public/pdfs/test.pdf","./public/imgExtPdf")
// .then(
// function (data) {
//     // return data;
//     console.log("images", data);
// }).catch(function (error) {
//     console.log(error)
// })


app.use("/", express.static("public"));

app.use(fileUpload());
app.post("/extract-text", (req, res) => {
    if (!req.files && !req.files.pdfFile) {
        res.status(400);
        res.end();
    }else{
        if(req.files){
            // console.log(req.files);
            let file = req.files.pdfFile;
            console.log(file)
            let fileName = file.name;
            console.log(fileName);
            file.mv("./public/pdfs/"+fileName, function (err) { 
                if(err){ res.send(err) } 
                else{ 
                    
                    exportImages("./public/pdfs/"+fileName,"./public/imgExtPdf")
                    .then(
                    function (data) {
                        // return data;
                        console.log(data);
                        
                    }).catch(function (error) {
                        console.log(error)
                    })
                    
                    console.log("File Uploaded") 
                } 
            })
        }
    }
    pdfParse(req.files.pdfFile).then(result => {
        res.send(result.text);
    });
});

app.listen(4500, () => console.log('Application is running'));
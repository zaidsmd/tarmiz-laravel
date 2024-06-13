import {dataTableInit} from "../dataTable_init.js";

const dataTableLink = window.location.origin+'/admin/projects';
const dataTableColumns = [
    {data:'id',name:'id'},
    {data:'title',name:'title'},
    {data:'type',name:'type'},
    {data:'actions'},
];
dataTableInit(dataTableLink,dataTableColumns,null,null)

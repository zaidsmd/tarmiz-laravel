import {dataTableInit} from "../dataTable_init.js";

const dataTableLink = window.location.origin+'/admin/articles';
const dataTableColumns = [
    {data:'id',name:'id'},
    {data:'title',name:'title'},
    {data:'date',name:'date'},
    {data:'actions'},
];
dataTableInit(dataTableLink,dataTableColumns,null,null)

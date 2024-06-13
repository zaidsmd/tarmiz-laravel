import {dataTableInit} from "../dataTable_init.js";

const dataTableLink = window.location.origin+'/admin/messages/archives';
const dataTableColumns = [
    {data:'name',name:'name'},
    {data:'email',name:'email'},
    {data:'subject',name:'subject'},
    {data:'message',name: 'message'},
];
dataTableInit(dataTableLink,dataTableColumns,null,null);


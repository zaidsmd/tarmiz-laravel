import {dataTableInit} from "../dataTable_init.js";

const dataTableLink = window.location.origin+'/admin/messages';
const dataTableColumns = [
    {data:'name',name:'name'},
    {data:'email',name:'email'},
    {data:'subject',name:'subject'},
    {data:'message',name: 'message'},
    {data:'actions',name: 'actions'},
];
dataTableInit(dataTableLink,dataTableColumns,null,null);

$(document).on('click','.__datatable_archive',function (){
    let btn=$(this)
    let html = btn.html();
    btn.attr('disabled','disabled');
    btn.html('<span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>');
    $.ajax({
        url: btn.data('url'),
        success: response =>{
            notifier.show(response, 'Action reussie', 'success',window.location.origin+'/images/notification/ok-48.png', 4000);
            if ($('#dataTable').length > 0) {
                $('#dataTable').DataTable().ajax.reload()
            } else {
                location.reload();
            }
            btn.removeAttr('disabled');
            btn.html(html);
        },
        error: (xhr)=>{
            notifier.show('Erreur', '', 'danger', window.location.origin+'/images/notification/high_priority-48.png', 4000);
            if ($('#dataTable').length > 0) {
                $('#dataTable').DataTable().ajax.reload()
            } else {
                location.reload();
            }
            btn.removeAttr('disabled');
            btn.html(html);
        }
    })
})

/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */
$((function(){var e=$("#ListId").html();$("#ListId").remove();var l=$([]).add($("#name")).add($("#alt")),i=($.baseUrl(),$("#AdminPrefix").html(),null);function a(){var l=$.bcUtil.apiAdminBaseUrl+"bc-uploader/uploader_files/upload.json",i=$(this);$.bcUtil.showLoader(),$("#UploaderFileFile"+e).val()&&$.bcToken.check((function(){var a=new FormData;return a.append("file",i.prop("files")[0]),a.append("_csrfToken",$.bcToken.key),$("#UploaderFileUploaderCategoryId"+e).length&&a.append("uploader_category_id",$("#UploaderFileUploaderCategoryId"+e).val()),$.ajax({url:l,headers:{Authorization:$.bcJwt.accessToken},type:"post",data:a,dataType:"json",processData:!1,contentType:!1,cache:!1,success:t})}),{useUpdate:!1,hideLoader:!1})}function t(l){l?($("#UploaderFileUploaderCategoryId"+e).length&&($("#FilterUploaderCategoryId"+e).val($("#UploaderFileUploaderCategoryId"+e).val()),i=$("#UploaderFileUploaderCategoryId"+e).val()),n()):($("#ErrorMessage").remove(),$("#FileList"+e).prepend('<p id="ErrorMessage" class="message">'+bcI18n.uploaderAlertMessage2+"</p>"),$("#Waiting").hide()),$("#UploaderFileFile"+e).remove(),$("#SpanUploadFile"+e).append('<input id="UploaderFileFile'+e+'" type="file" value="" name="data[UploaderFile][file]" class="uploader-file-file" />'),$("#UploaderFileFile"+e).change(a),$.bcToken.key=null}function n(){$.bcUtil.ajax(function(){var l=$("#ListUrl"+e).attr("href"),i=[];$("#FilterUploaderCategoryId"+e).length?i.push("uploader_category_id="+$("#FilterUploaderCategoryId"+e).val()):i.push("uploader_category_id="),$('input[name="uploader_type"]:checked').length?i.push("uploader_type="+$('input[name="uploader_type"]:checked').val()):i.push("uploader_type=all"),$("#FilterName"+e).val()?i.push("name="+encodeURI($("#FilterName"+e).val())):i.push("name=");var a=location.search.match("limit=([0-9]+)");return a&&i.push("limit="+a[1]),i.length&&(l+="?"+i.join("&")),l}(),r,{hideLoader:!1,type:"GET"})}function o(e){var l=$("#LoginUserId").html(),i=$("#LoginUserGroupId").html(),a=Number($("#UsePermission").html()),t=!1;return 1!=i&&a&&l!=e&&(t=!0),t}function r(l){$("#FileList"+e).html(l),function(){$("#UsePermission").html(),i&&$("#UploaderFileUploaderCategoryId"+e).val(i),$(".selectable-file").unbind("click.selectEvent"),$(".selectable-file").unbind("mouseenter.selectEvent"),$(".selectable-file").unbind("mouseleave.selectEvent"),$(".page-numbers a").unbind("click.paginationEvent"),$(".selectable-file").unbind("dblclick.dblclickEvent"),$(".filter-control").unbind("click.filterEvent"),$(".btn-delete").unbind("click");var l="#bbb";$.fn.contextMenu&&!e&&$("#DivPanelList").length&&$("#DivPanelList").contextMenu({selector:".selectable-file",callback:s,build:function(e,l){var i=o($(e).find(".user-id").html());return{items:{edit:{name:bcI18n.uploaderEdit,icon:"edit",disabled:function(e,l){return i}},delete:{name:bcI18n.uploaderDelete,icon:"delete",disabled:function(e,l){return i}}}}}}),$("#DivPanelList .selectable-file").each((function(){$.fn.contextMenu&&!e?o($(this).find(".user-id").html())?$(this).bind("dblclick.dblclickEvent",(function(){alert(bcI18n.uploaderAlertMessage3)})):$(this).bind("dblclick.dblclickEvent",(function(){$("#EditDialog").dialog("open")})):$(this).bind("contextmenu",(function(e){return!1})),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$("#UploaderFileFile"+e).change(a),e?($(".selectable-file").bind("mouseenter.selectEvent",(function(){$(this).css("background-color","#fffae7")})),$(".selectable-file").bind("mouseleave.selectEvent",(function(){$(this).css("background-color","#FFFFFF"),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$(".selectable-file").each((function(){$(this).bind("mousedown",(function(){$(".selectable-file").removeClass("selected"),$(this).addClass("selected")}))}))):($("#DivPanelList .selectable-file").bind("mouseenter.selectEvent",(function(){$(this).css("background-color","#fffae7")})),$("#DivPanelList .selectable-file").bind("mouseleave.selectEvent",(function(){$(this).css("background-color","#FFFFFF"),$(this).hasClass("unpublish")&&$(this).css("background-color",l)})),$("#DivPanelList .selectable-file").each((function(){$(this).bind("mousedown",(function(){$(".selectable-file").removeClass("selected"),$(this).addClass("selected")}))}))),$(".page-numbers a").bind("click.paginationEvent",(function(){return $("#Waiting").show(),$.get($(this).attr("href"),r),!1})),$("#FileList"+e).trigger("filelistload"),$("#FileList"+e).effect("highlight",{},1500)}(),$("#FileList"+e).trigger("loadTableComplete"),$("#Waiting").hide()}function s(l,i){var a=$("#FileList"+e+" .selected .id").html().trim(),t=$.bcUtil.apiAdminBaseUrl+"bc-uploader/uploader_files/delete/"+a+".json",o=l.indexOf("#");switch(-1!==o&&(l=l.substring(o+1,l.length)),l){case"edit":$("#EditDialog").dialog("open");break;case"delete":confirm(bcI18n.uploaderConfirmMessage1)&&$.bcToken.check((function(){$.ajax({url:t,headers:{"X-CSRF-Token":$.bcToken.key},type:"post",dataType:"json",beforeSend:function(){$("#Waiting").show()},success:function(){$("#FileList"+e).trigger("deletecomplete"),n()},error:function(){alert(bcI18n.uploaderAlertMessage4)},complete:function(){$("#Waiting").hide(),$.bcToken.key=null}})}),{useUpdate:!1,hideLoader:!1})}}n(),$("#BtnFilter").click((function(){return n(),!1})),$("#EditDialog").dialog({bgiframe:!0,autoOpen:!1,position:{at:"center center",of:window},width:960,modal:!0,open:function(){var l=$("#FileList"+e+" .selected .name").html();$("#UploaderFileImage"+e+" .uploader-file-image-inner").remove(),$("#UploadFileImageLoader"+e).show(),$("#UploaderFileId"+e).val($("#FileList"+e+" .selected .id").html().trim()),$("#UploaderFileName"+e).val(l),$("#UploaderFileAlt"+e).val($("#FileList"+e+" .selected .alt").html());var i=$("#FileList"+e+" .selected .publish-begin").html().trim(),a=$("#FileList"+e+" .selected .publish-begin-time").html().trim();$("#UploaderFilePublishBegin-date").val(i),$("#UploaderFilePublishBegin-time").val(a);var t=i;a&&(t+=" "+a),$("#UploaderFilePublishBegin").val(t);var n=$("#FileList"+e+" .selected .publish-end").html().trim(),o=$("#FileList"+e+" .selected .publish-end-time").html().trim();$("#UploaderFilePublishEnd-date").val(n),$("#UploaderFilePublishEnd-time").val(o);var r=n;o&&(r+=" "+o),$("#UploaderFilePublishEnd").val(r),$("#UploaderFileUserId"+e).val($("#FileList"+e+" .selected .user-id").html()),$("#UploaderFileUserName"+e).html($("#FileList"+e+" .selected .user-name").html()),$("#_UploaderFileUploaderCategoryId"+e).length&&$("#_UploaderFileUploaderCategoryId"+e).val($("#FileList"+e+" .selected .uploader-category-id").html()),$.ajax({url:$.bcUtil.adminBaseUrl+"bc-uploader/uploader_files/ajax_image/"+l+"/large",headers:{Authorization:$.bcJwt.accessToken},type:"get",dataType:"html",success:function(l){$("#UploadFileImageLoader"+e).hide(),$("#UploadFileImageLoader"+e).after(l)}})},buttons:{cancel:{text:bcI18n.uploaderCancel,click:function(){$(this).dialog("close")}},save:{text:bcI18n.uploaderSave,click:function(){var i=$(this),a=$("#UploaderFileId"+e).val();$.bcToken.check((function(){var t={id:a,name:$("#UploaderFileName"+e).val(),alt:$("#UploaderFileAlt"+e).val(),publish_begin:$("#UploaderFilePublishBegin"+e).val(),publish_end:$("#UploaderFilePublishEnd"+e).val(),user_id:$("#UploaderFileUserId"+e).val(),uploader_category_id:$("#_UploaderFileUploaderCategoryId"+e).val(),_csrfToken:$.bcToken.key};return $.ajax({url:$.bcUtil.apiAdminBaseUrl+"bc-uploader/uploader_files/edit/"+a+".json",headers:{Authorization:$.bcJwt.accessToken},type:"post",data:t,dataType:"json",success:function(){n(),l.removeClass("ui-state-error"),i.dialog("close")},error:function(e){var l={name:bcI18n.uploaderFile,publish_begin:bcI18n.uploaderPublishBegin,publish_end:bcI18n.uploaderPublishEnd},i=e.responseJSON.message;void 0!==e.responseJSON.errors&&(i+="\n",Object.keys(e.responseJSON.errors).forEach((function(a){Object.keys(e.responseJSON.errors[a]).forEach((function(t){i+="\n・"+l[a]+"："+e.responseJSON.errors[a][t]}))}))),alert(i)}})}),{hideLoader:!1,useUpdate:!1})}}},close:function(){l.val("").removeClass("ui-state-error")}})}));
//# sourceMappingURL=index_panel.bundle.js.map
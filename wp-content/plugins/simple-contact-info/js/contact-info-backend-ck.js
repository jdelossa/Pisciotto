jQuery(document).ready(function(e){e("#contactSocialForm").submit(function(){var t=e(this).find("input[type=radio]:checked").length;if(t<5){e("#dialog-message").dialog({modal:!0,buttons:{Ok:function(){e("#dialog-message").dialog("close")}}});return!1}e(this).submit()});e(".sci-delete").live("click",function(){var t=e(this);e("#dialog-confirm").dialog({resizable:!1,height:190,modal:!0,buttons:{"Delete icon":function(){var n={action:"sci_ajax_delete_icon",icon:t.parent("li").find(".sci-radio").val()};e.post(ajaxurl,n,function(n){n&&t.parent("li").fadeOut("slow",function(){var e=t.parents("tr").find("li").length;e==1?t.parents("tr").remove():t.parent("li").remove()});e("#dialog-confirm").dialog("close")})},Cancel:function(){e(this).dialog("close")}}})});e(".sci-delete-option").live("click",function(){var t=e(this);e("#dialog-confirm").dialog({resizable:!1,height:190,modal:!0,buttons:{Delete:function(){var n={action:"sci_ajax_delete_option",option:t.parent("td").find(".sci-option").val()};e.post(ajaxurl,n,function(n){t.parent("td").parent("tr").fadeOut("slow");e("#dialog-confirm").dialog("close")})},Cancel:function(){e(this).dialog("close")}}})})});
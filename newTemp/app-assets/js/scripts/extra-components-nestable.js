/*
 * Nested - Extra Components
 */

$(function() {

  var updateOutput = function(e) {
    var list = e.length ? e : $(e.target),
      output = list.data('output');
      let array;
    if (window.JSON) {
    // $('#nestable3-output').val(window.JSON.stringify(list.nestable('serialize')));
   //  $('#nestable3-output').val("");
    // $('#nestable3-output').val(list.nestable('serialize').length);
        array=list.nestable('serialize');
       stringToArray(array);
    } else {
      output.val('JSON browser support required for this demo.');
    }
  };

  // activate Nestable for list 1
  $('#nestable').nestable({
      group: 1
    })
    .on('change', updateOutput);

  // activate Nestable for list 2
  $('#nestable2').nestable({
      group: 1
    })
    .on('change', updateOutput);
  $('#nestable3').nestable({
      group: 1
    })
    .on('change', updateOutput);

  // output initial serialised data
  updateOutput($('#nestable').data('output', $('#nestable-output')));
  updateOutput($('#nestable2').data('output', $('#nestable2-output')));
  updateOutput($('#nestable3').data('output',$('#nestable3-output')));

  $('#nestable-menu').on('click', function(e) {
    var target = $(e.target),
      action = target.data('action');
    if (action === 'expand-all') {
      $('.dd').nestable('expandAll');
    }
    if (action === 'collapse-all') {
      $('.dd').nestable('collapseAll');
    }
  });

  $('#nestable3').nestable();

});

function stringToArray(array){
    let order=[];
    for(let j=0;j<=array.length-1;j++){
       //  temp= array[j]['id'].split(",");
            order.push({
                'id':array[j]['id'],
                'pos':j+1
            });
    }
    $.ajax({
        url: "channel/sort",
        type: 'post',
        data: {
            data:order
        },
        success: function (result) {
            if(result == "success"){
                //var toastHTML = 'Channel position changed successfully';
               // M.toast({html: toastHTML});
              // console.log('');
            }
            else
            {
              // console.log('Something went wrong');
             //   var toastHTML = 'Something went wrong';
              //  M.toast({html: toastHTML});
            }
        },
        complete: function () {

        }
    })
}

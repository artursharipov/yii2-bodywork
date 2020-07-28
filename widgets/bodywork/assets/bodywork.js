var auto = $("#bodywork__auto"),
    cart = $("#bodywork__cart")

//Initial
loadCalculator(2)

//infoBar
$('#bodywork').on('mouseenter', 'path', function(e){

    var info = $(this).data('info')

    $('#infoBar')
        .text(info)
        .show()
})

//SHOW SIDE MENU
$('#bodywork').on('click', '.two', function(e){
    
    var id = $(this).data('id'),
        info = $(this).data('info'),
        left = $(this).offset().left -  $(this).closest("svg").offset().left + this.getBoundingClientRect().width/2,
        top = $(this).offset().top -  $(this).closest("svg").offset().top + this.getBoundingClientRect().height/2

    $('#sideMenu')
        .show()
        .css('left', left + 'px')
        .css('top', top + 'px')
        .children('div')
        .attr('data-id', id)
        .attr('data-info', info)
})

//ADD DETAIL
$('#bodywork').on('click', ".one", function(e){

    //sideMenu close
    $('#sideMenu').hide()

    var id = e.target.getAttribute('data-id'),
        side = e.target.getAttribute('data-side')

    $.ajax({
        url: '/bodywork/frontend/add',
        data: {id: id, side: side},
        type: 'GET',
        success: function(res){
            $(cart).html(res)
            $("path[data-id="+id+"]").addClass(side)
        },
    });
})

//DELETE DETAIL
$('#bodywork').on('click', ".glyphicon-remove", function(e){
    var uid = e.target.getAttribute('data-uid'),
        id = e.target.getAttribute('data-id'),
        side = e.target.getAttribute('data-side')

    $.ajax({
        url: '/bodywork/frontend/del',
        data: {uid: uid},
        type: 'GET',
        success: function(res){

            $(cart).html(res)
            //delete class left/right/none
            $("path[data-id="+id+"]").removeClass(side)
        },
    });
})

//CHANGE CLASS
$("#bodywork").on('click', ".change_class", function(e){

    var id = e.target.getAttribute('data-id')

    loadCalculator(id)
})

//LOAD CALCULATOR
function loadCalculator(id){
    //loading car
    auto.load('/bodywork/frontend/auto?id=' + id)

    $.ajax({
        url: '/bodywork/frontend/show',
        type: 'GET',
        success: function(res){

            $(cart).html(res)

            //toggle active class
            $("#bodywork .change_class").removeClass("active")
            $("#bodywork .change_class[data-id="+id+"]").addClass("active")
        }
    });
}

//BUTTON SUBMIT
$("#bodywork").on('click', "#submit_work", function(e){
    $.ajax({
        url: '/bodywork/frontend/submit',
        type: 'GET',
        success: function(res){
            alert(res)
        },
    });
})
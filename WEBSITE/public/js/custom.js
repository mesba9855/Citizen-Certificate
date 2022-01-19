// Owl Carousel Start..................


$(document).ready(function() {
    let one = $("#one");
    let two = $("#two");
    let three = $("#three");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    three.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});

// Owl Carousel End..................

$('#contactSendBtnId').click(function (){
    let contact_name=$('#contactNameId').val();
    let contact_mobile=$('#contactMobileId').val();
    let contact_email=$('#contactEmailId').val();
    let contact_massage=$('#contactMsgId').val();

    SendContact(contact_name,contact_mobile,contact_email,contact_massage);
});



function SendContact(contact_name,contact_mobile,contact_email,contact_massage){

    if (contact_name.length==0){
        $('#contactSendBtnId').html('please enter your name !');
        setTimeout(function () {
            $('#contactSendBtnId').html('Again send');
        },2000)
    }

    else if (contact_mobile.length==0){
        $('#contactSendBtnId').html('please enter your mobile !');
        setTimeout(function () {
            $('#contactSendBtnId').html('Again send');
        },2000)
    }

    else if (contact_email.length==0){
        $('#contactSendBtnId').html('please enter your email !');
        setTimeout(function () {
            $('#contactSendBtnId').html('Again send');
        },2000)
    }

    else if (contact_massage.length==0){
        $('#contactSendBtnId').html('please enter your massage !');
        setTimeout(function () {
            $('#contactSendBtnId').html('Again send');
        },2000)
    }

    else{

        axios.post('/contactSend',{
            contact_name:contact_name,
            contact_mobile:contact_mobile,
            contact_email:contact_email,
            contact_massage:contact_massage,
        })
            .then(function (response){
                if (response.status===200 && response.data===1){
                    $('#contactSendBtnId').html('Request Successful');
                    setTimeout(function () {
                        $('#contactSendBtnId').html('send');
                    },3000)

                    $('#contactNameId').val('');
                    $('#contactMobileId').val('');
                    $('#contactEmailId').val('');
                    $('#contactMsgId').val('');
                }

                else{
                    $('#contactSendBtnId').html('Request Fail ! Try Again');
                    setTimeout(function () {
                        $('#contactSendBtnId').html('Send');
                    },3000)
                }
            })
            .catch(function (error){
                $('#contactSendBtnId').html('Try Again');
                setTimeout(function () {
                    $('#contactSendBtnId').html('Send');
                },3000)
            })

    }

}

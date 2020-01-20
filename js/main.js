$(function(){


        $('.pskill-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.repeat-me')
          var clonedRow = $(this).find('#to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        $('.edu-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.edu-repeat-me')
          var clonedRow = $(this).find('#edu-to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        $('.exp-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.exp-repeat-me')
          var clonedRow = $(this).find('#exp-to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#imagePreview').css('background-image', 'url('+e.target.result +')');
              $('#imagePreview').hide();
              $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#imageUpload").change(function() {
          readURL(this);
          var file_data = $('#imageUpload').prop('files')[0];
          var form_data = new FormData();
          form_data.append('file', file_data);
          $.ajax({
            url: "upload.php",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
              console.log(data);
            }
          });
        });
        $('.pd').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#ps").attr("style", "display: none !important");
          $("#exp").attr("style", "display: none !important");
          $("#edu").attr("style", "display: none !important");
          $("#woym").attr("style", "display: none !important");
          $("#pd").attr("style", "display: block !important");
          $("#portfolio").attr("style", "display: none !important");
          $('.forward').css('display','inline-block')
          $('.po-submit').attr("style", "display: none !important");
        })

        $('.ps').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#ps").attr("style", "display: block !important");
          $("#exp").attr("style", "display: none !important");
          $("#edu").attr("style", "display: none !important");
          $("#woym").attr("style", "display: none !important");
          $("#pd").attr("style", "display: none !important");
          $("#portfolio").attr("style", "display: none !important");
          $('.forward').css('display','inline-block')
          $('.po-submit').attr("style", "display: none !important");
        })
        $('.exp').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#exp").attr("style", "display: block !important");
          $("#ps").attr("style", "display: none !important");
          $("#edu").attr("style", "display: none !important");
          $("#woym").attr("style", "display: none !important");
          $("#pd").attr("style", "display: none !important");
          $("#portfolio").attr("style", "display: none !important");
          $('.forward').css('display','inline-block')
          $('.po-submit').attr("style", "display: none !important");
        })
        $('.edu').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#edu").attr("style", "display: block !important");
          $("#ps").attr("style", "display: none !important");
          $("#exp").attr("style", "display: none !important");
          $("#woym").attr("style", "display: none !important");
          $("#pd").attr("style", "display: none !important");
          $("#portfolio").attr("style", "display: none !important");
          $('.forward').css('display','inline-block')
          $('.po-submit').attr("style", "display: none !important");
        })
        $('.woym').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#woym").attr("style", "display: block !important");
          $("#ps").attr("style", "display: none !important");
          $("#exp").attr("style", "display: none !important");
          $("#edu").attr("style", "display: none !important");
          $("#pd").attr("style", "display: none !important");
          $("#portfolio").attr("style", "display: none !important");
          $('.forward').css('display','inline-block')
          $('.po-submit').attr("style", "display: none !important");
        })
        $('.portfolio').on('click',function(e){
          e.preventDefault()
          $(this).addClass("active").siblings().removeClass("active");
          $("#portfolio").attr("style", "display: block !important");
          $("#woym").attr("style", "display: none !important");
          $("#ps").attr("style", "display: none !important");
          $("#exp").attr("style", "display: none !important");
          $("#edu").attr("style", "display: none !important");
          $("#pd").attr("style", "display: none !important");
          $('.po-submit').attr("style", "display: inline-block !important");
          $('.forward').css('display','none')
        })

      $('.back').on('click',function(e){
          e.preventDefault()
         $('.crumbs').find('.active').prev().click()
         $('.forward').css('display','inline-block')
         $('.po-submit').attr("style", "display: none !important");
      })

      $('.forward').on('click',function(e){
          e.preventDefault()
         $('.crumbs').find('.active').next().click()
         var last = $('.crumbs').find('.active').hasClass('portfolio');
         if(last){
            $(this).css('display','none')
            $('.po-submit').attr("style", "display: inline-block !important");
         }
      })
      });

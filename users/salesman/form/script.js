var inpTotal = 0;
$('.btn').click(function(event) {
  event.preventDefault();
  var target = $(this).data('target');
//  console.log('#'+target);
$('#click-alert').html('data-target= ' + target).fadeIn(50).delay(3000).fadeOut(1000);
});

const showCurrentInputs = (type = 'text', text, name = null) => {
  if (type == 'text') {
    $('.bd-content').append('<p>'+text+'</p>');
  } else if (type == 'checkbox') {
    $('.bd-content').append('<p>'+name +' - '+text+'</p>');
  }
}

$('#nextBtn').on('click', function() {
 // $('.bd-content').css('display', 'block !important');
//  if ($(elem).attr('type') == 'text') {
//    
//     
//  } else if ($(elem).attr('type') == 'checkbox') {
//     $('.tab').eq(currentTab-1).find('input').each(function(ind, el){
//       if ($(el).is('checked')) inpTotal++;
//     });
//  }
 
 //console.log('Current', currentTab-1, $('.tab').eq(currentTab-1).find('input').length, inpTotal);

    var tabref = $('.tab').eq(currentTab-1).find('input').length;
    inpTotal += tabref;
    $('.bd-content').empty();

    $('input').each(function(index, elem){
      console.log(index, inpTotal);
      var el = $(elem);
      var type;
      var val;
      var name;

      if (el.attr('type') == 'text') {
          type = 'text';
          val = el.val();
          name = null;
      } else if ( el.attr('type') == 'checkbox') {
          type = 'checkbox';
          val = el.is(':checked') ? 'YES' : 'NO';
          name = el.next('label').text() ;
      }

      showCurrentInputs(type, val, name);

      if ( index + 1 == inpTotal ) {
        console.log(index+1 == inpTotal);
        return false;
      }

    });
});


// Multi-Step Form
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
// This function will display the specified tab of the form...
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
// and fix the Previous/Next buttons:
if (n == 0) {
  document.getElementById("prevBtn").style.display = "none";
} else {
  document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
  document.getElementById("nextBtn").innerHTML = "Submit";

} else {
  document.getElementById("nextBtn").innerHTML = "Next";
}
//... and run a function that will display the correct step indicator:
fixStepIndicator(n)
}




function nextPrev(n) {
// This function will figure out which tab to display
var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
if (n == 1 && !validateForm()) return false;
// Hide the current tab:
x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
currentTab = currentTab + n;
// if you have reached the end of the form... 
if (currentTab >= x.length) {
  // ... the form gets submitted:
  $('#basicModal').modal('show');
  e.preventDefault();
  document.getElementById("regForm").submit();
  return false;
 
}
// Otherwise, display the correct tab:
showTab(currentTab);
}

function validateForm() {
// This function deals with validation of the form fields
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
for (i = 0; i < y.length; i++) {
  // If a field is empty...
  if (y[i].value == "") {
    // add an "invalid" class to the field:
    y[i].className += " invalid";
    // and set the current valid status to false
    valid = false;
  }
}
// If the valid status is true, mark the step as finished and valid:
if (valid) {
  document.getElementsByClassName("step")[currentTab].className += " finish";
}
return valid; // return the valid status
}

function fixStepIndicator(n) {
// This function removes the "active" class of all steps...
var i, x = document.getElementsByClassName("step");
for (i = 0; i < x.length; i++) {
  x[i].className = x[i].className.replace(" active", "");
}
//... and adds the "active" class on the current step:
x[n].className += " active";
}




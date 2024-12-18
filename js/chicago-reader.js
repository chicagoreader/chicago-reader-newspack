document.addEventListener('DOMContentLoaded', function() {
  
  // section front "this week" listings blocks
  var blocks = document.querySelectorAll('.section-front div.thisweek_block');
  blocks.forEach(function(block) {

    // Select all the h2 a elements and p elements within the block
    var titleLinks = block.querySelectorAll('h2 a');
    var excerpts = block.querySelectorAll('p');

    // Loop through each h2 a and replace its content with the corresponding p's text
    titleLinks.forEach(function(titleLink, index) {
      if (excerpts[index]) {
        // Replace the h2 a text with the text from the corresponding p
        titleLink.innerHTML = excerpts[index].innerHTML;
      }
    });
    
  });

});
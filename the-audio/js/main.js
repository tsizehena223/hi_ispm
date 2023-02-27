// Initialize the typing animation
const typingText = document.querySelector('.typing-text');
const text = typingText.querySelector('h1').textContent;
typingText.querySelector('h1').textContent = '';

let i = 0;
function type() {
  if (i < text.length) {
    typingText.querySelector('h1').textContent += text.charAt(i);
    i++;
    setTimeout(type, 50);
  }
}

// Start the typing animation when the page is loaded
window.addEventListener('load', function() {
  type();
});

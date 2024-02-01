import './bootstrap';
import 'lazysizes';

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('img[data-src]').forEach(img => {
      const actualImage = img.getAttribute('data-src');
      if (actualImage) {
          const tempImage = new Image();
          tempImage.onload = () => {
              img.src = actualImage;
          };
          tempImage.onerror = () => {
              console.error('Error loading image:', actualImage);
          };
          tempImage.src = actualImage;
      }
  });
});
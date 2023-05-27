import './bootstrap';
import basement from '../../vendor/basement-chat/basement-chat/dist/basement.plugin.esm';
import intersect from '@alpinejs/intersect';

window.Alpine.plugin(intersect);
window.Alpine.plugin(basement);
window.Alpine.start();

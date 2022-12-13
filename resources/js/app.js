import './bootstrap';

import Alpine from 'alpinejs';

import './controller/EventsAdminController.js';
import './controller/EventsPublicController.js';
import './controller/ParticipatesAdminControler.js';

window.Alpine = Alpine;

Alpine.start();

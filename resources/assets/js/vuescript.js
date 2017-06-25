require('./bootstrap');

window.Vue = require('vue');

var vm = new Vue({
	el: '#app',
	data: {

		message: 'Hello, Vue'
	}
})
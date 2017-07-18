import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';
import Example from './components/Example';

window.axios = axios;
window.Form = Form;

new Vue({
  el:'#app',
  components: {
    Example
  },
  data: {
    form: new Form({
      name: '',
      description: ''
    })
  },
  methods: {
    //Make an ajax request to our server - /skills
    onSubmit() {
      this.form.post('/vue-app/public/projects')
      .then(data => console.log(data))
      .catch(errors => console.log(errors));
    }
  }
});

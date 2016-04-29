import {Component} from 'angular2/core';

@Component({
    selector: 'home',
    templateUrl: 'app/home.html',
})
export class HomeComponent { 

  constructor() {}

  reserve() {
    alert('Reserved.');
  }

  sendMessage() {
    alert('Message sent.');
  }
  
}

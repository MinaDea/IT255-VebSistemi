import {Component} from 'angular2/core';
import 'rxjs/Rx';
import {HomeComponent} from './home.component';

@Component({
    selector: 'my-app',
    template: '<home></home>',
    directives: [HomeComponent]
})
export class AppComponent {}

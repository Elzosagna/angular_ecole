import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styleUrls: ['./details.component.css']
})
export class DetailsComponent {

  constructor(private http: HttpClient) { }
  httpdata;
  name;
  searchparam = 2;

  ngOnInit() {
    this.http.get("http://elhadjiibrahimas.promo-21.codeur.online/ecole/src/app/api/api.php?id="+this.searchparam)
    .subscribe(data => this.displaydata(data))
  }
  displaydata(data) {this.httpdata = data;}
}

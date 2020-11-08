import { Component, OnInit } from '@angular/core';
import {Story} from "../story";
import {Router} from "@angular/router";



@Component({
  selector: 'app-contactus',
  templateUrl: './contactus.component.html',
  styleUrls: ['./contactus.component.css']
})
export class ContactusComponent implements OnInit {
  private router: any;

  constructor() { }

  ngOnInit() {
  }
  public contact():void{
    this.router.navigate(['']);
  }
}

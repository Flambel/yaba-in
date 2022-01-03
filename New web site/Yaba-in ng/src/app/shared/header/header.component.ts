import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  contact: boolean = false;
  home: boolean = false;
  services: boolean = false;
  about: boolean = false;
  tech: boolean = false;
  infos: boolean = false;

  constructor(
    private router: Router
  ) {

  }

  ngOnInit(): void {
    this.getPage();
  }

  getPage() {
    let page = localStorage.getItem('page');;
    console.log('tab: ', page);
    if (page =='contact') {
      this.contact = true
      this.home = false;
      this.services = false;
      this.about = false;
      this.tech = false;
      this.infos = false;
      console.log('Page: ', page);
      // return page;
    }
    if (page =='home') {
      console.log('Page: ', page);
      this.contact = false
      this.home = true;
      this.services = false;
      this.about = false;
      this.tech = false;
      this.infos = false;
      // return page;
    }
    if (page =='about') {
      console.log('Page: ', page);
      this.contact = false
      this.home = false;
      this.services = false;
      this.about = true;
      this.tech = false;
      this.infos = false;
      // return page;
    }
    if (page =='tech') {
      console.log('Page: ', page);
      this.contact = false
      this.home = false;
      this.services = false;
      this.about = false;
      this.tech = true;
      this.infos = false;
      // return page;
    }
    if (page =='services') {
      console.log('Page: ', page);
      this.contact = false
      this.home = false;
      this.services = true;
      this.about = false;
      this.tech = false;
      this.infos = false;
      // return page;
    }
    if (page =='infos') {
      console.log('Page: ', page);
      this.contact = false
      this.home = false;
      this.services = false;
      this.about = false;
      this.tech = false;
      this.infos = true;
      // return page;
    }
  }

}

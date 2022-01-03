import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent implements OnInit {

  constructor(
    private router: Router
  ) { }

  ngOnInit(): void {
  }

  navigateToHome() {
    this.router.navigate(['/home']);
  }
  navigateToServices() {
    this.router.navigate(['/services']);
  }
  navigateToContact() {
    this.router.navigate(['/contact']);
  }
  navigateToTech() {
    this.router.navigate(['/tech']);
  }
  navigateToInfos() {
    this.router.navigate(['/infos']);
  }
  navigateToAbout() {
    this.router.navigate(['/about']);
  }
}

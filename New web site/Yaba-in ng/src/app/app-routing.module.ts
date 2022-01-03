import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './components/about/about.component';
import { ContactComponent } from './components/contact/contact.component';
import { HomeComponent } from './components/home/home.component';
import { InfosComponent } from './components/infos/infos.component';
import { ServicesComponent } from './components/services/services.component';
import { TechComponent } from './components/tech/tech.component';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full',
  },
  {
    path: 'home',
    component: HomeComponent,
    data: {
      title: 'Home'
    }
  },
  {
    path: 'contact',
    component: ContactComponent,
    data: {
      title: 'Contact'
    }
  },
  {
    path: 'services',
    component: ServicesComponent,
    data: {
      title: 'Services'
    }
  },
  {
    path: 'infos',
    component: InfosComponent,
    data: {
      title: 'Infos'
    }
  },
  {
    path: 'tech',
    component: TechComponent,
    data: {
      title: 'Tech'
    }
  },
  {
    path: 'about',
    component: AboutComponent,
    data: {
      title: 'About'
    }
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

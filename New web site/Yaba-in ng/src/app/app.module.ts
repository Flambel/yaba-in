import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FooterComponent } from './shared/footer/footer.component';
import { NavbarComponent } from './shared/navbar/navbar.component';
import { ContactComponent } from './components/contact/contact.component';
import { ServicesComponent } from './components/services/services.component';
import { AboutComponent } from './components/about/about.component';
import { HomeComponent } from './components/home/home.component';
import { InfosComponent } from './components/infos/infos.component';
import { HeaderComponent } from './shared/header/header.component';
import { TechComponent } from './components/tech/tech.component';
import { TeamComponent } from './sections/team/team.component';
import { PricesComponent } from './sections/prices/prices.component';
import { ServComponent } from './sections/serv/serv.component';
import { DescriptionComponent } from './sections/description/description.component';
import { ServSmalComponent } from './sections/serv-smal/serv-smal.component';
import { ToolsComponent } from './sections/tools/tools.component';
import { TechLevelComponent } from './sections/tech-level/tech-level.component';
import { SkillsComponent } from './sections/skills/skills.component';

@NgModule({
  declarations: [
    AppComponent,
    FooterComponent,
    NavbarComponent,
    ContactComponent,
    ServicesComponent,
    AboutComponent,
    HomeComponent,
    InfosComponent,
    HeaderComponent,
    TechComponent,
    TeamComponent,
    PricesComponent,
    ServComponent,
    DescriptionComponent,
    ServSmalComponent,
    ToolsComponent,
    TechLevelComponent,
    SkillsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

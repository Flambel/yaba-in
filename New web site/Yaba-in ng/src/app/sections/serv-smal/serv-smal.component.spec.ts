import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ServSmalComponent } from './serv-smal.component';

describe('ServSmalComponent', () => {
  let component: ServSmalComponent;
  let fixture: ComponentFixture<ServSmalComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ServSmalComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ServSmalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TechLevelComponent } from './tech-level.component';

describe('TechLevelComponent', () => {
  let component: TechLevelComponent;
  let fixture: ComponentFixture<TechLevelComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TechLevelComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TechLevelComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

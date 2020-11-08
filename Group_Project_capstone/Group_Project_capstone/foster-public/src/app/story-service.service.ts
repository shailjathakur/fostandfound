import { Injectable } from '@angular/core';
import {Story} from './story';
import {Http,Response} from '@angular/http';
import {parseHttpResponse} from "selenium-webdriver/http";

@Injectable()

export class StoryDataService {
  private storiesUrl='http://localhost:3000/api/stories';


  constructor(private http:Http) { }

  getStorys():Promise<void | Story[]>{
    return this.http.get(this.storiesUrl)
      .toPromise()
      .then(response=>response.json() as Story[])
      .catch(this.handleError);
  }
  getSingleStory(storyId:String):Promise<void|Story>{
    return this.http.get(this.storiesUrl+'/'+storyId)
      .toPromise()
      .then(response=>response.json()as Story)
      .catch(this.handleError);
  }
  createStory(newStory:Story):Promise<void|Story>{

    return this.http.post(this.storiesUrl,newStory)
      .toPromise()
      .then(response=>response.json() as Story)
      .catch(this.handleError)
      ;
  }
  updatestory(newStory):Promise<void|Story>{
    console.log("in update function return::::0"+newStory._id);
    var putURL = this.storiesUrl + '/' + newStory._id;
    return this.http.put(putURL, newStory
    )
      .toPromise()
      .then(response=>response.json()as Story)
      .catch(this.handleError);
  }
  deleteStory(storyId:String):Promise<void| String> {
    if (confirm("Are you sure?")) {
      return this.http.delete(this.storiesUrl + '/' + storyId)
        .toPromise()
        .then(response => response.json() as String)
        .catch(this.handleError);
    }
  }


  private handleError(error:any){
    console.log("error");
  }
}

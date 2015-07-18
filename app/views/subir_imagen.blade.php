@extends('base')
@section('contenido')
<div ng-app="fileUpload" ng-controller="MyCtrl">
    watching model:
    <div class="button" ngf-select ng-model="files">Upload using model $watch</div>
    <div class="button" ngf-select ngf-change="upload($files)">Upload on file change</div>
    Drop File:
    <div ngf-drop ng-model="files" class="drop-box" 
         ngf-drag-over-class="dragover" ngf-multiple="true" ngf-allow-dir="true"
         ngf-accept="'image/*,application/pdf'">Drop Images or PDFs files here</div>
    <div ngf-no-file-drop>File Drag/Drop is not supported for this browser</div>

    Image thumbnail: <img ngf-src="files[0]" ngf-default-src="'/thumb.jpg'" ngf-accept="'image/*'">
    Audio preview: <audio controls ngf-src="files[0]" ngf-accept="'audio/*'"></audio>
    Video preview: <video controls ngf-src="files[0]" ngf-accept="'video/*'"></video>
</div>

@stop
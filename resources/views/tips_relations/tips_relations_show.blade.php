@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Tip Relation Info</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label>Domain</label>
            <input disabled value="{{$tips_relation->domain}}"  type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Range</label>
                <input disabled value="{{$tips_relation->range}}"  type="text" class="form-control"  >
            </div>
            <div class="form-group">
                <label>Similar Relation</label>
            <input disabled value="{{$tips_relation->similar_relation}}"  type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Cardinality</label>
                <input disabled value="{{$tips_relation->cardinality}}"  type="text" class="form-control"  >
            </div>
            <a href="/tips_relations"><button class="btn btn-success btn-block" type="button">Go back</button></a>
        </div>
        <!-- /.box-body -->
</div>
@stop
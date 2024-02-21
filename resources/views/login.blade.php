@extends('layout')

<div class="container">
    <div class="row">
    <div class="col-8 offset-2">

<form action="/login" method="POST">
    @csrf
        <h1>Login</h1>
       
        <div class="mb-3">
            <label for="loginemail" class="form-label">Email address</label>
            <input name='loginemail' type="email" class="form-control" id="email" >
        </div>
        <div class="mb-3">
            <label for="loginpassword" class="form-label">Password</label>
            <input name='loginpassword' type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-dark">Login</button>
    </form>   
    </div>
    </div>
</div>
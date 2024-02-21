@extends('layout')

<div class="container">
    <div class="row">
    <div class="col-8 offset-2">

<form action="register" method="POST">
    @csrf
        <h1>Register</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name='name' type="text" class="form-control" id="name" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name='email' type="email" class="form-control" id="email" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name='password' type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>   
    </div>
    </div>
</div>
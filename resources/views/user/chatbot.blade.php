@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Health Assistant Chatbot</h3>
    <div class="card mt-3">
        <div class="card-body" id="chat-box" style="height: 300px; overflow-y: scroll; background: #f8f9fa;">
            <div class="text-start mb-2"><span class="badge bg-secondary p-2">Bot: Hello! How can I help you today?</span></div>
        </div>
        <div class="card-footer">
            <p>Select a topic:</p>
            <button class="btn btn-outline-primary m-1" onclick="ask('hours')">Clinic Hours</button>
            <button class="btn btn-outline-primary m-1" onclick="ask('docs')">What documents do I need?</button>
            <button class="btn btn-outline-primary m-1" onclick="ask('flu')">I have flu symptoms</button>
        </div>
    </div>
</div>

<script>
    function ask(topic) {
        let box = document.getElementById('chat-box');
        let question = "";
        let answer = "";

        if(topic === 'hours') {
            question = "Clinic Hours";
            answer = "We are open Monday to Friday, 8:00 AM to 5:00 PM.";
        } else if(topic === 'docs') {
            question = "What documents do I need?";
            answer = "Please bring a valid ID and your previous medical records if available.";
        } else if(topic === 'flu') {
            question = "I have flu symptoms";
            answer = "Please stay hydrated and book an appointment immediately. Wear a mask when visiting.";
        }

        box.innerHTML += `<div class="text-end mb-2"><span class="badge bg-primary p-2">You: ${question}</span></div>`;
        setTimeout(() => {
            box.innerHTML += `<div class="text-start mb-2"><span class="badge bg-secondary p-2">Bot: ${answer}</span></div>`;
            box.scrollTop = box.scrollHeight;
        }, 500);
    }
</script>
@endsection
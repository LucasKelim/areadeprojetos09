document.addEventListener('DOMContentLoaded', function() {
    if (typeof formMessageData !== 'undefined') {
        var message = formMessageData.message;
        var type = formMessageData.type;

        var messageDiv = document.createElement('div');
        messageDiv.classList.add('form-message');
        messageDiv.classList.add(type === 'success' ? 'notice-success' : 'notice-error');
        messageDiv.innerHTML = message;

        document.body.appendChild(messageDiv);
        
        setTimeout(function() {
            messageDiv.style.opacity = 0;
            setTimeout(function() {
                messageDiv.remove();
            }, 500);
        }, 8000);
    }
});

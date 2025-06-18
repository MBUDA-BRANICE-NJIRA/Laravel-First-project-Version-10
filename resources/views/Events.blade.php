<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | Your Company</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --text: #1f2937;
            --text-light: #6b7280;
            --bg: #ffffff;
            --bg-light: #f8fafc;
            --border: #e5e7eb;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            line-height: 1.6;
            background: var(--bg-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .events-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .events-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .events-header p {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .event-card {
            background: var(--bg);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .event-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .event-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .event-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .event-description {
            color: var(--text-light);
            font-size: 1rem;
            line-height: 1.6;
        }

        .add-event-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .add-event-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 30px -5px rgba(99, 102, 241, 0.4);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 1000;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--bg);
            border-radius: 16px;
            padding: 2rem;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text);
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .close-btn:hover {
            background: var(--bg-light);
            color: var(--text);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-family: inherit;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-light);
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text);
        }

        .empty-state p {
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .empty-state-btn {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .empty-state-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        @media (max-width: 768px) {
            .events-header h1 {
                font-size: 2rem;
            }
            
            .events-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 1rem;
            }
            
            .modal-content {
                width: 95%;
                padding: 1.5rem;
            }
            
            .add-event-btn {
                bottom: 1rem;
                right: 1rem;
            }
        }
    </style>
</head>
<body>
    @include('Navbar')
    <div class="container">
        <div class="events-header">
            <h1>Events</h1>
            <p>Discover upcoming events and activities. Stay connected with what's happening.</p>
        </div> 
    </div>

    <button class="add-event-btn" onclick="openModal()">+</button>

    <div class="modal" id="event-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Create New Event</h2>
                <button class="close-btn" onclick="closeModal()">&times;</button>
            </div>
            <form id="event-form">
                <div class="form-group">
                    <label for="event-title">Event Title</label>
                    <input type="text" id="event-title" name="title" required placeholder="Enter event title">
                </div>
                
                <div class="form-group">
                    <label for="event-description">Event Description</label>
                    <textarea id="event-description" name="description" required placeholder="Describe your event..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Create Event</button>
            </form>
        </div>
    </div>

    <script>
        let events = [];

        function openModal() {
            document.getElementById('event-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('event-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
            document.getElementById('event-form').reset();
        }

        function renderEvents() {
            const eventsContainer = document.getElementById('events-container');
            const eventsGrid = document.getElementById('events-grid');
            
            if (events.length === 0) {
                eventsContainer.style.display = 'block';
                eventsGrid.style.display = 'none';
            } else {
                eventsContainer.style.display = 'none';
                eventsGrid.style.display = 'grid';
                
                eventsGrid.innerHTML = events.map(event => `
                    <div class="event-card">
                        <h3 class="event-title">${event.title}</h3>
                        <p class="event-description">${event.description}</p>
                    </div>
                `).join('');
            }
        }

        document.getElementById('event-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const title = document.getElementById('event-title').value;
            const description = document.getElementById('event-description').value;
            
            if (title && description) {
                events.push({ title, description });
                renderEvents();
                closeModal();
            }
        });

        // Close modal when clicking outside
        document.getElementById('event-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Initial render
        renderEvents();
    </script>
</body>
</html>
@extends('layout.main')
@section('content')
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --border-radius: 8px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-bg);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        h2 {
            color: var(--secondary-color);
            margin: 30px 0 15px;
            font-size: 1.8rem;
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 8px;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .contact-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
        }
        
        .contact-card h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .contact-info {
            margin-bottom: 15px;
        }
        
        .contact-info p {
            margin: 8px 0;
        }
        
        .contact-info strong {
            color: var(--primary-color);
        }
        
        .contact-methods {
            margin-top: 20px;
        }
        
        .contact-methods a {
            display: inline-block;
            margin-right: 10px;
            color: var(--secondary-color);
            text-decoration: none;
        }
        
        .contact-methods a:hover {
            text-decoration: underline;
        }
        
        .links-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 40px 0;
        }
        
        .links-column {
            flex: 1;
            min-width: 200px;
            margin: 0 15px 30px;
        }
        
        .links-column h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .links-column ul {
            list-style: none;
        }
        
        .links-column li {
            margin-bottom: 8px;
        }
        
        .links-column a {
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .links-column a:hover {
            color: var(--secondary-color);
        }
        
        .newsletter {
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            margin: 40px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .newsletter h3 {
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 120px;
        }
        
        .btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        
        footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .links-section {
                flex-direction: column;
            }
        }
    </style>

    <header>
        <div class="container">
            <h1>Contact Us</h1>
            <p>GET IN TOUCH WITH ANIMAL MATTERS TO ME MUMBAI</p>
        </div>
    </header>

    <main class="container">
        <section>
            <h2>Our Locations</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <h3>Kolad Location</h3>
                    <div class="contact-info">
                        <p><strong>KOLAD:</strong> Via Vittorio</p>
                        <p><strong>Mountains:</strong> 4000,000</p>
                        <p><strong>Arizona:</strong> 4000,000</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>Malad Location</h3>
                    <div class="contact-info">
                        <p><strong>C13:</strong> Red / Los Alamos</p>
                        <p><strong>Núcleo:</strong> Nuevo Río, Malad</p>
                        <p><strong>Volumen:</strong> 40000,000</p>
                    </div>
                </div>

                <div class="contact-card">
                    <h3>Animal Matter Drive</h3>
                    <div class="contact-info">
                        <p><strong>Location:</strong> C13.56 / JOS Amaro, Malad Aveiro 18, Malad Plaza, Sumatra, Mountain View, Utah</p>
                        <p><strong>Phone:</strong> +91 990 12227</p>
                        <p><strong>Email:</strong> gcimnobu@gmail.com</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="links-section">
            <div class="links-column">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Adjuviera</a></li>
                    <li><a href="#">Unión: Cam</a></li>
                    <li><a href="#">Reconoced & Ready</a></li>
                    <li><a href="#">Our Biops</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="links-column">
                <h3>Our Causes</h3>
                <ul>
                    <li><a href="#">Donate A Bad for Injured An Story Animals</a></li>
                    <li><a href="#">Can Air Conve, Protect the Shared Contribute for a large ambulance to rescue Injured and Nostly Animals</a></li>
                    <li><a href="#">Fund a Trained Team at ANTNI Footnote</a></li>
                    <li><a href="#">Novice Today, Save Tomorrow</a></li>
                    <li><a href="#">Help Us Give A Second Change To Injured, Of Injured and Bad Story Animals</a></li>
                </ul>
            </div>
        </section>

        <section class="newsletter">
            <h2>Drop a Message</h2>
            <form>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </section>
    </main>


@endsection
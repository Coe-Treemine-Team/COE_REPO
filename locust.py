from locust import HttpUser, task, between

class LaravelUser(HttpUser):
    wait_time = between(1, 5)  # Wait time between tasks

    @task
    def load_homepage(self):
        self.client.get("/")

    @task
    def load_login_page(self):
        self.client.get("/login")

    @task
    def load_register_page(self):
        self.client.get("/register")

    @task
    def load_contact_page(self):
        self.client.get("/contact")

    @task
    def load_about_page(self):
        self.client.get("/about")

    @task
    def login(self):
        self.client.post("/login", {
            "email": "test@example.com",
            "password": "password"
        })

    @task
    def register(self):
        self.client.post("/register", {
            "name": "Test User",
            "email": "testuser@example.com",
            "password": "password",
            "password_confirmation": "password"
        })

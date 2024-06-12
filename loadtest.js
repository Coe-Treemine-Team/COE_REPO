import http from "k6/http";
import { check, sleep } from "k6";

export let options = {
    vus: 50, // number of virtual users
    duration: "1m", // duration of the test
};

export default function () {
    // Test the homepage
    let res = http.get("http://127.0.0.1:8000");
    check(res, {
        "status was 200": (r) => r.status === 200,
        "response time was < 500ms": (r) => r.timings.duration < 500,
    });

    // Test a POST request
    let payload = JSON.stringify({ name: "test", email: "test@example.com" });
    let params = { headers: { "Content-Type": "application/json" } };
    res = http.post("http://127.0.0.1:8000/contact.blade.php", payload, params);
    check(res, {
        "status was 201": (r) => r.status === 201,
    });

    sleep(1); // sleep for 1 second between requests
}

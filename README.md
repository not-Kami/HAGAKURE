# HAGAKURE

**Hackathon @ EFP – Built in 3 Days**

HAGAKURE is a rapid prototype developed during a Hackathon at EFP. Built using a custom PHP framework and containerized with Docker, this project was created by a team of front-end developers and UI/UX designers. It showcases a quick turnaround solution with a clear separation between application logic and public assets.

---

## Table of Contents

- [Introduction](#introduction)
- [Project Structure](#project-structure)
- [Installation & Usage](#installation--usage)
- [Docker Setup](#docker-setup)
- [Contributing](#contributing)
- [Contributors](#contributors)
- [License](#license)
- [Contact](#contact)

---

## Introduction

HAGAKURE was developed in just 3 days during a Hackathon @ EFP. The project uses a custom PHP framework to demonstrate a quick yet functional approach to building modern web applications. With a clear focus on design and user experience, our team combined the skills of dedicated developers and creative UI/UX designers to bring this project to life.

---

## Project Structure

The repository is organized into two main folders:

- **app:** Contains the backend PHP code (controllers, models, and other application logic).
- **public:** Holds all publicly accessible assets including HTML, CSS, JavaScript, and images.

Additional configuration files (like Docker files) and documentation are included in the root of the repository.

---

## Installation & Usage

### 1. Clone the Repository

```bash
git clone https://github.com/not-Kami/HAGAKURE.git
cd HAGAKURE
```

### 2. Using Docker (Recommended)

Ensure you have [Docker](https://www.docker.com/get-started) installed on your machine.

#### Build and Run Containers

```bash
docker-compose up --build
```

#### Access the Application

Once the containers are up and running, open your browser and navigate to [http://localhost](http://localhost) (or the port specified in your Docker configuration).

### 3. Manual Setup (Without Docker)

If you prefer to run the application without Docker, make sure your environment meets the requirements of the custom PHP framework. Configure your web server to point to the **public/** folder as the document root, and ensure the **app/** folder is accessible by your PHP code.

---

## Docker Setup

This project uses Docker to simplify development and deployment. The repository includes a `Dockerfile` and a `docker-compose.yml` to set up the PHP environment quickly.

- **Build and run the containers:**

  ```bash
  docker-compose up --build
  ```

- **Stop the containers:**

  ```bash
  docker-compose down
  ```

---

## Contributing

Contributions to HAGAKURE are welcome! Whether you want to add new features, improve the design, or fix bugs, please follow these steps:

1. **Fork the repository.**
2. **Create a new branch:**

   ```bash
   git checkout -b feature/YourFeature
   ```

3. **Commit your changes:**

   ```bash
   git commit -m "Add: Description of your feature or fix"
   ```

4. **Push your branch:**

   ```bash
   git push origin feature/YourFeature
   ```

5. **Open a Pull Request** detailing your changes.

For major changes, please open an issue first to discuss your ideas.

---

## Contributors

A big thank you to everyone who contributed to HAGAKURE. Below is a list of team members along with their roles and contact details where applicable.

| Name                        | Role                          | Contact                              |
| --------------------------- | ----------------------------- | ------------------------------------ |
| **Salim Siouda**            | Lead Developer                | [kami.labs@proton.me](mailto:kami.labs@proton.me) |
| **Askaj Mergim**            | Developer                     | —                                    |
| **De Wit Nathan**           | Developer                     | —                                    |
| **Polidoro Alessio**        | UI/UX Designer, UX & CSS Lead | [polidoroalessio9@gmail.com](mailto:polidoroalessio9@gmail.com) |
| **Lucas**                   | UI/UX Designer                | [moussilucas@gmail.com](mailto:moussilucas@gmail.com) |
| **Van Den Branden Melanie** | UI/UX Designer                | —                                    |
| **El Omari Ines**           | UI/UX Designer                | —                                    |
| **Khalloufi Mehdi**         | UI/UX Designer                | —                                    |
| **Berruyer Bruno**          | UI/UX Designer                | —                                    |
| **Lambert Cassandre**       | UI/UX Designer                | —                                    |

If you have contributed and would like to be added to this list, please submit a pull request with your GitHub profile link and a short bio.
Or send me an  [email](mailto:kami.labs@proton.me) with the name of this repository as a subject

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Contact

For any inquiries or further information, please reach out to the lead developer:

- **Salim Siouda** – [kami.labs@proton.me](mailto:kami.labs@proton.me)

---

*Happy coding and thank you for checking out HAGAKURE!*
```

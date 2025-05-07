# Vegekul Reporter

`vegekul/reporter` is a Laravel package that provides a visual dashboard for tracking Sprint progress and bug statistics using data from the Backlog API.

## 🚀 Features

- List all sprints from a Backlog project
- View tasks associated with each sprint
- Display issue progress and bug distribution using charts

---

## 📦 Installation

### Step 1: Require the package

If this package is not on Packagist yet, add the GitHub repository to your `composer.json`:

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/your-username/vegekul-reporter"
  }
]
```

Then run:

```bash
composer require vegekul/reporter
```

---

### Step 2: Publish configuration and views

Run the following command to publish the package assets:

```bash
php artisan vendor:publish --tag=vegekul-reporter
```

This will publish:
- A config file: `config/reporter.php`
- Blade views for the dashboard UI
- Routes under `routes/vegekul-reporter.php`

---

### Step 3: Configure environment variables

Add the following to your `.env` file:

```env
BACKLOG_API_BASE_URL=https://yourdomain.backlog.com/api/v2
BACKLOG_API_KEY=your_backlog_api_key
BACKLOG_PROJECT_ID=your_project_id
```

These are required for connecting to your Backlog workspace and project.

---

## 📊 Usage

After serving your Laravel project:

```bash
php artisan serve
```

Open the dashboard in your browser:

```
http://localhost:8000/vegekul-reporter/dashboard
```

You will see a list of sprints. Click a sprint to view detailed issues and a visual breakdown of their status (including bugs).

---

## 📄 License

This package is open-source software licensed under the [MIT License](LICENSE).

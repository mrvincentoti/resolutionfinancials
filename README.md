## Requirements
- PHP >= 8.2
- MySQL or other database server
- Composer
- NodeJS

### How to Install
1. Clone the project
2. Go to the project root directory and run `composer install` and `npm install`
3. Create `.env` file and copy content from `.env.example`
4. Run `php artisan key:generate` from terminal
5. Change database information in `.env`
6. Run migrations by executing `php artisan migrate` , Then Run  `php artisan db:seed` if you want use faker database records,
7. Start the project by running `php artisan serve`


### Collaborating on the Project
1. Create a New Branch: Before making any changes, switch to a new branch using:
    ```
    git checkout -b feature/your-feature-name
    ```
2. Make Your Changes: Work on your feature or fix.
3. Commit Changes: After making changes, commit them using:
   ```
   git add .
   ```
   ```
   git commit -m "A descriptive message about your changes"
   ```
4. Push Changes: Push your branch to the remote repository with:
   ```
   git push origin feature/your-feature-name
   ```
5. Open a Pull Request (PR): Go to the repository on GitHub, and open a new Pull Request from your branch to the main 
   branch. Ensure you assign mrvincentoti for review.
6. Code Review: Wait for the PR to be reviewed. Make any requested changes.
7. Merge to Main: Once the PR is approved, merge it into the main branch.

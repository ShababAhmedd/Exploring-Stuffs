# Dmoney REST API QA Automation

This project contains functional test cases for the Dmoney REST API using Postman and Newman. It validates key transactions such as user creation, deposits, send money, withdrawal, payment, balance inquiries and transaction statement. Both positive and negative test scenarios are covered with automated report generation.

## Features

- Admin can create an Agent, two Customers, and a Merchant via the API
- Deposit money from the SYSTEM account to an Agent (range: 10 TK to 10,000 TK)
- Agent deposits money into a Customer’s account
- Customer-to-Customer money transfer
- Customer withdraws money to an Agent account (range: 10 TK to 10,000 TK)
- View balance of both Agent and Customer accounts
- Fetch transaction statement using transaction ID
- Make payments from a Customer to a Merchant
- Merchant can view their balance
- Includes positive and negative test cases for each scenario
- All test cases implemented in a structured Postman Collection

## Technologies Used

- **Postman** – for creating and running API test cases
- **Newman** – for CLI-based automated test execution
- **JavaScript (Test Scripts)** – for test assertions in Postman
- **JSON** – for API request/response bodies
- **Git & GitHub** – for version control and code hosting
- **Google Sheets** – for documenting bugs and improvement suggestions and writing standard test cases

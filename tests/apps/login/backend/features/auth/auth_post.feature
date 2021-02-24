Feature: Api status
  In order to know the server is up and running
  As a health check
  I want to check the api status

  Scenario: Check the api status
    Given I send a POST request to "/auth" with body:
    """
    {
      "name": "Pablo",
      "email": "gayarre.pablo@gmail.com",
      "password": "123456789"
    }
    """
    Then the response status code should be 200
    And the response should be empty
Feature: Api status
  In order to auth
  As a user
  I want to check if authenticate

  Scenario: Check the authentication
    Given I send a POST request to "/auth" with body:
    """
    {
      "name": "Pablo",
      "email": "gayarre.pablo@gmail.com",
      "password": "123456789"
    }
    """<
    Then the response status code should be 200
    And the response should be empty
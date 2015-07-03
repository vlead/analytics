import unittest
from flask.ext.testing import TestCase
import config
from app import app

class AnalyticsTestCase(unittest.TestCase):

    def test_numberofhits(self):
        json_string = config.grand_total()
        print json_string

        tester = app.test_client(self)
        response = tester.get('http://localhost:5000/numberofhits')
        self.assertEqual(response.status_code, 200)
        self.assertEqual(json_string,  response.data)
               
if __name__ == '__main__':
    unittest.main()

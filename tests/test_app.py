import unittest
from flask.ext.testing import TestCase
import sample_data
from app import app

class AnalyticsTestCase(unittest.TestCase):

    def test_numberofhits(self):
        json_string = sample_data.grand_total()
        print json_string

        tester = app.test_client(self)
        response = tester.get('http://localhost:5000/numberofhits')
        self.assertEqual(response.status_code, 200)
        self.assertEqual(json_string,  response.data)

    def test_usage(self):
        json_string = sample_data.usage_hits()
        print json_string

        tester = app.test_client(self)
        response = tester.get('http://localhost:5000/usage')
        self.assertEqual(response.status_code, 200)
        self.assertEqual(json_string,  response.data)
               
if __name__ == '__main__':
    unittest.main()

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp
{
    public class Sulfuras : IItem
    {
        Item _item;
        public Sulfuras(Item item)
        {
            _item = item;
        } 
        public void UpdateQuality()
        {
            if (_item.Quality <= 80)
            {
                _item.Quality = _item.Quality + 1;
            }
        }
    }
}
